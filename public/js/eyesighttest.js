// Get the canvas element and its context
const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');
const FPS =24;
let buffer = [];
let cameradone = false;

// Create a video element and add it to the document
const video = document.createElement('video');
video.autoplay = true;

function speak(text) {
    const synth = window.speechSynthesis;
    const utterance = new SpeechSynthesisUtterance(text);
    utterance.pitch = 2;
    synth.speak(utterance);
}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

createFileFromUrl = function (path, url, callback) {
    let request = new XMLHttpRequest();
    request.open('GET', url, true);
    request.responseType = 'arraybuffer';
    request.onload = function (ev) {
        if (request.readyState === 4) {
            
            if (request.status === 200) {
                let data = new Uint8Array(request.response);
                cv.FS_createDataFile('/', path, data, true, false, false);
                callback();
            } else {
                alert('Failed to load ' + url + ' status: ' + request.status);
            }
        }
    };
    request.send();
};

function loadClassifier() {
    
     // in the callback, load the cascade from file 
}

// Create a function to measure the distance of a face from the camera
function measureDistance() {
    // Get the user's camera stream
    navigator.mediaDevices.getUserMedia({ video: true })
        .then(function (stream) {
            
            speak('make the distance from the camera 50');

            // Attach the stream to the video element
            video.srcObject = stream;
            // Wait for the video to load
            video.addEventListener('loadedmetadata', function () {
                // Set the canvas dimensions to match the video dimensions
                canvas.width = video.videoWidth;
                canvas.height = video.videoHeight;

                // Create a face detector using OpenCV
                const classifier = new cv.CascadeClassifier();
                
                let faceCascadeFile = '../haarcascade_frontalface_default.xml'; // path to xml
                createFileFromUrl(faceCascadeFile, faceCascadeFile, () =>  {
                    classifier.load(faceCascadeFile);
                    console.log('hi');
                });

                // Loop through the video frames and detect the face
                let intervalId = setInterval(function () {
                    // Draw the current video frame on the canvas
                    ctx.drawImage(video, 0, 0);

                    // Convert the canvas image to a matrix
                    const img = cv.imread(canvas);

                    // Convert the image to grayscale
                    cv.cvtColor(img, img, cv.COLOR_RGBA2GRAY);

                    // Detect the face in the image
                    const faces = new cv.RectVector();
                    classifier.detectMultiScale(img, faces);

                    // If a face is detected, measure the distance
                    if (faces.size() > 0) {
                        // Get the coordinates of the first detected face
                        const face = faces.get(0)

                        // Calculate the face position and distance
                        const faceSize = face.width + face.height;

                        // Calculate the distance based on the face size
                        const distance = Math.round(16 * (canvas.width + canvas.height) / faceSize); // assumes face size is 16cm

                        // Draw a rectangle around the face on the canvas
                        ctx.beginPath();
                        ctx.rect(face.x, face.y, face.width, face.height);
                        ctx.lineWidth = 2;
                        ctx.strokeStyle = 'blue';
                        if (distance > 49 & distance < 51) {
                            ctx.strokeStyle = 'green';
                        }
                        ctx.stroke();
                        
                        buffer.push(distance);
                        ctx.font = 'bold 24px Arial';
                        ctx.fillStyle = 'red';
                        ctx.fillText(distance, face.x, face.y )

                        
                        
                        if (buffer.length == 5) {
                            sum = 0;
                            for (let i = 0; i < 5; i++) {
                                sum += buffer[i];
                            }
                            let avgdistance = sum / 5;
                            // Print the distance to the console
                            console.log('Distance from face to camera:', avgdistance);
                            buffer = [];
                            if (avgdistance > 49 & avgdistance < 51) {
                                cameradone = true;
                            }
                        }


                    }

                    // Release the resources
                    faces.delete();
                    img.delete();

                    async function clearint() {
                        clearInterval(intervalId);
                        cameradone = true;
                        canvas.remove();
                        video.remove();
                        stream.getTracks().forEach(track => track.stop());
                        await displayLetter();
                    }

                    // Exit the loop if the user stops the measurement
                    if (!video.srcObject) clearInterval(intervalId);
                    if (cameradone) clearint();
                    document.getElementById('stopButton').addEventListener('click', clearint)
                }, 1000 / FPS);
            });
        })
        .catch(function (error) {
            console.error(error);
        });
}


async function displayLetter() {
    const letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
    let numCorrect = 0;

    for (let i = 0; i < 10; i++) {
        const letter = letters[i];
        result.innerHTML = `<p style="font-size:${(10-i)*24}px">${letter}</p>`;
        
        const spokenLetterPromise = recognizeAlphabet();
        const spokenLetter = await Promise.race([
            spokenLetterPromise,
            new Promise(resolve => setTimeout(resolve, 7000)) // Wait for 7 seconds
        ]);
        if (spokenLetter && spokenLetter.toUpperCase() === letter) {
            numCorrect++;

            //speak(`Correct! You said the letter ${letter}`);
            
        } else {
            //speak(`Incorrect! The correct letter was ${letter}`);

        }
    }
    console.log(`You got ${numCorrect} out of 10 letters correct.`);
}

async function recognizeAlphabet() {
    let recognition = new window.webkitSpeechRecognition();
    console.log("listening")
    
    recognition.lang = 'en-US';
    recognition.interimResults = false;
    recognition.maxAlternatives = 1;
  
    recognition.start();
  
    let alphabet = await new Promise((resolve, reject) => {
      setTimeout(() => {
        recognition.stop();
      }, 7000);
  
      recognition.onresult = (event) => {
        let speechResult = event.results[0][0].transcript;
        let match = speechResult.match(/[a-zA-Z]/i);
        
        if (match) {
          resolve(match[0].toUpperCase());
        }
      }
  
      recognition.onerror = (event) => {
        reject(new Error(`Recognition error: ${event.error}`));
      }
    });
    recognition.stop();
    console.log('you spoke' + alphabet)
    return alphabet;
  }
  
  

async function start() {
    measureDistance();
}
