(function() {
    const firebaseConfig = {
        apiKey: "AIzaSyAs3ZvfNxCzfyRHQpdfxFL1Uv4KoGPuPDs",
        authDomain: "sgp-1-67129.firebaseapp.com",
        databaseURL: "https://sgp-1-67129.firebaseio.com",
        projectId: "sgp-1-67129",
        storageBucket: "sgp-1-67129.appspot.com",
        messagingSenderId: "457737777708",
        appId: "1:457737777708:web:6065e2407e1aa212375789"
    };
// Initialize Firebase
    firebase.initializeApp(firebaseConfig);

    googleSignIn = () => {
        base_provider = new firebase.auth.GoogleAuthProvider()
        firebase.auth().signInWithPopup(base_provider).then(function (result) {
            console.log(result)
            console.log("Success..google account linked")
            window.location = "home.php";
        }).catch(function (err) {
            console.log(err)
            console.log("Sign in failed")
        })
    }
}());