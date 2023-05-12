let firebaseConfig = {
    // Enter your firebase credentials
    apiKey: "AIzaSyAGfMrbrgiI-UiECo_Uv4XefZZ4JudCwuw",
    authDomain: "blogging-website-27365.firebaseapp.com",
    projectId: "blogging-website-27365",
    storageBucket: "blogging-website-27365.appspot.com",
    messagingSenderId: "1090713582149",
    appId: "1:1090713582149:web:6a9681488905968cc7412c"
};

firebase.initializeApp(firebaseConfig);

let db = firebase.firestore();