var firebaseConfig = {
  apiKey: "AIzaSyBlLiuzSIatMBWofLVBoKQCkPmhhgkPitU",
  authDomain: "projectweb-b864c.firebaseapp.com",
  projectId: "projectweb-b864c",
  storageBucket: "projectweb-b864c.appspot.com",
  messagingSenderId: "214943774193",
  appId: "1:214943774193:web:d009802043a1d9f5e9c050",
  measurementId: "G-KJ8TCFMTN9"
  };
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

// Refernece contactInfo collections
let contactInfo = firebase.database().ref("WhatsApp");

// Listen for a submit
document.querySelector(".contact-form").addEventListener("submit", submitForm);

function submitForm(e) {
  e.preventDefault();

  //   Get input Values
  let name = document.querySelector(".name").value;
  let telefone = document.querySelector(".telefone").value;
  console.log(name, telefone);

  saveContactInfo(name, telefone);

  document.querySelector(".contact-form").reset();
}

// Save infos to Firebase
function saveContactInfo(name, telefone) {
  let newContactInfo = contactInfo.push();

  newContactInfo.set({
    name: name,
    telefone: telefone,
  });
}