<?php

namespace App\Http\Controllers;

use App\ContactForm;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //*************Store data in database****************
        $firstName = $request->get('firstName');
        $lastName = $request->get('lastName');
        $phone = $request->get('phone');
        $email = $request->get('email');
        $subject = $request->get('subject');
        $message = filter_var($request->get('message'), FILTER_SANITIZE_STRING);
        $status = '';

        $validated = $request->validate([
            'firstName' => 'required|alpha',
            'lastName' => 'required|alpha',
            'phone' => 'alpha_dash',
            'email' => 'required|email',
            'subject' => 'required|alpha_spaces',
            'message' => 'required|string'
        ]);

        $contactForm = new ContactForm();
        $contactForm->firstName = $firstName;
        $contactForm->lastName = $lastName;
        $contactForm->phone = $phone;
        $contactForm->email = $email;
        $contactForm->subject = $subject;
        $contactForm->message = $message;

        $contactForm->save();

        //************Send email**********************
        // Replace sender@example.com with your "From" address.
        // This address must be verified with Amazon SES.
        $sender = 'sergey@triumvirtech.com';
        $senderName = 'Sergey';

        // Replace recipient@example.com with a "To" address. If your account
        // is still in the sandbox, this address must be verified.
        $recipient1 = 'sergeysegal4@gmail.com';
        $recipient2 = 'royandermannjr@gmail.com';
//        $recipient3 = 'xphillips2@gmail.com';

        // Replace smtp_username with your Amazon SES SMTP user name.
        //$usernameSmtp = 'ses-smtp-user.20200519-145225';
        $usernameSmtp = env('AWS_ACCESS_KEY_ID');

        // Replace smtp_password with your Amazon SES SMTP password.
        $passwordSmtp = env('AWS_SECRET_ACCESS_KEY');

        // If you're using Amazon SES in a region other than US West (Oregon),
        // replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
        // endpoint in the appropriate region.
        $host = 'email-smtp.us-east-1.amazonaws.com';
        $port = 587;

        // The subject line of the email
        //$subject = 'Amazon SES test (SMTP interface accessed using PHP)';

        // The plain-text body of the email
        $bodyText =  "Email Test\r\nThis email was sent through the
                      Amazon SES SMTP interface using the PHPMailer class.";

        // The HTML-formatted body of the email
        $bodyHtml = "<h1>Contact Request</h1>
                     <p>First Name: $firstName</p>
                     <p>Last Name: $lastName</p>
                     <p>Phone: $phone</p>
                     <p>Email: $email</p>
                     <p>Subject: $subject</p>
                     <p>Message:</p>
                     <p>$message</p>";

        $mail = new PHPMailer(true);

        try {
            // Specify the SMTP settings.
            $mail->isSMTP();
            $mail->setFrom($sender, $senderName);
            $mail->Username   = $usernameSmtp;
            $mail->Password   = $passwordSmtp;
            $mail->Host       = $host;
            $mail->Port       = $port;
            $mail->SMTPAuth   = true;
            $mail->SMTPSecure = 'tls';
//            $mail->addCustomHeader('X-SES-CONFIGURATION-SET', $configurationSet);

            // Specify the message recipients.
            $mail->addAddress($recipient1);
            $mail->addAddress($recipient2);
//            $mail->addAddress($recipient3);
            // You can also add CC, BCC, and additional To recipients here.

            // Specify the content of the message.
            $mail->isHTML(true);
            $mail->Subject    = $subject;
            $mail->Body       = $bodyHtml;
            $mail->AltBody    = $bodyText;
            $mail->Send();
            $status = "Form submitted successfully!";
//            echo "Email sent!" , PHP_EOL;
        } catch (phpmailerException $e) {
            $status = "An error occurred. {$e->errorMessage()}";
//            echo "An error occurred. {$e->errorMessage()}", PHP_EOL; //Catch errors from PHPMailer.
        } catch (Exception $e) {
            $status = "Email not sent. {$mail->ErrorInfo}";
//            echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL; //Catch errors from Amazon SES.
        }

        return view('contact.index', compact('status'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function show(ContactForm $contactForm)
    {
//        return view('contact.show', compact('contactForm'));
    }

    public function showAll()
    {
        $forms = ContactForm::all();
        return view('contact.show-all', compact("forms"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactForm $contactForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactForm $contactForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactForm $contactForm)
    {
        //
    }
}
