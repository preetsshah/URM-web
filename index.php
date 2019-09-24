<!doctype html>
<html lang=""">
<head>
    <meta charset="utf-8">
    <title>Bootstrap 4 template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="apple-touch-icon" href="">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="">
</head>
<body>
<button onclick="googleSignIn()">Google SignIn</button>
<script src="https://www.gstatic.com/firebasejs/3.2.0/firebase.js"></script>
<script>
    // Your web app's Firebase configuration
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

    googleSignIn=()=>{
        base_provider = new firebase.auth.GoogleAuthProvider()
        firebase.auth().signInWithPopup(base_provider).then(function(result) {
            console.log(result)
            console.log("Success..google account linked")
            window.location = "home.php";
        }).catch(function (err) {
            console.log(err)
            console.log("Sign in failed")
        })
    }
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
