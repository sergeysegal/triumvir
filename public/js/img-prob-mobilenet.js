console.log('ml5 version:', ml5.version);
let mobilenet;
let inputImage;

function modelReady() {
    console.log('Model is ready!');
    console.log(localStorage.getItem('userId'));
    mobilenet.predict(inputImage, getResults);
}

function getResults(error, results) {
    if(error) {
        console.error(error);
    }
    else {
        console.log(results);
    }
    let label0 = results[0].label;
    let prob0 = results[0].confidence;
    let label1 = results[1].label;
    let prob1 = results[1].confidence;
    let label2 = results[2].label;
    let prob2 = results[2].confidence;
    // fill(0);
    // textSize(64);
    // text(label0, 10, height - 100);
    // createP(label0);
    // createP(prob0);

    localStorage.setItem("label0", label0);
    document.getElementById("label0").innerHTML = localStorage.getItem("label0");

    localStorage.setItem("prob0", prob0);
    document.getElementById("prob0").innerHTML = localStorage.getItem("prob0");

    localStorage.setItem("label1", label1);
    document.getElementById("label1").innerHTML = localStorage.getItem("label1");

    localStorage.setItem("prob1", prob1);
    document.getElementById("prob1").innerHTML = localStorage.getItem("prob1");

    localStorage.setItem("label2", label2);
    document.getElementById("label2").innerHTML = localStorage.getItem("label2");

    localStorage.setItem("prob2", prob2);
    document.getElementById("prob2").innerHTML = localStorage.getItem("prob2");

}

function imageReady() {
    // image(inputImage, 0, 0, width, height);
}

function setup() {
    // createCanvas(640, 480);
    inputImage = createImg(`storage/users/${id}/file.jpg`, imageReady);
    inputImage.hide();
    mobilenet = ml5.imageClassifier('MobileNet', modelReady);

}

// function draw() {
//     background(100);
//     image(inputImage, 0, 0);
// }
