(function() {
    const firebaseConfig = {
        apiKey: "AIzaSyDIrbNg-qccrWwtPai_thPtXQdzt9Xgb-w",
        authDomain: "uniresourcemanagementapp.firebaseapp.com",
        databaseURL: "https://uniresourcemanagementapp.firebaseio.com",
        projectId: "uniresourcemanagementapp",
        storageBucket: "uniresourcemanagementapp.appspot.com",
        messagingSenderId: "201589853547",
        appId: "1:201589853547:web:026f88aa991390e104902e",
        measurementId: "G-7XGYQ2PFWZ"
};
;
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