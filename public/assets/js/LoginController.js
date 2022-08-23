 //import the initializeApp
 import {
  initializeApp
} from "https://www.gstatic.com/firebasejs/9.8.3/firebase-app.js";
import {
  getAuth,
  RecaptchaVerifier,
  signInWithPhoneNumber,
  signOut,
  FacebookAuthProvider,
  signInWithPopup,
  GoogleAuthProvider,
  fetchSignInMethodsForEmail,
} from 'https://www.gstatic.com/firebasejs/9.8.3/firebase-auth.js';
//replace this section with the firebase config object from your firebase console
const firebaseConfig = {
  apiKey: "AIzaSyC_dqvw25UbyU9jJwgO5B8ggBh1GrduTUQ",
  authDomain: "tanihara-89c0b.firebaseapp.com",
  projectId: "tanihara-89c0b",
  storageBucket: "tanihara-89c0b.appspot.com",
  messagingSenderId: "1065862819020",
  appId: "1:1065862819020:web:3df9b439b1cb8c288a6669",
  measurementId: "G-5907YN4WXX"
};
//initialize firebase config
const app = initializeApp(firebaseConfig);

// facebook provider
const facebookProvider = new FacebookAuthProvider();
// provider.addScope('user_birthday');
// facebookProvider.setCustomParameters({
// 'display': 'popup'
// });

const googleProvider = new GoogleAuthProvider();
googleProvider.setCustomParameters({
'login_hint': 'user@example.com'
});
//authenticate app communication to firebase
const auth = getAuth(app);
auth.languageCode = 'id';

// fetchSignInMethodsForEmail(auth,"dummystoragesharing@gmail.com").then((result) => {
//   console.log(result)
// }).catch((error) => {
//   console.log(error)
// })

// Facebook Trigger
window.loginFacebook = () => {
  signInWithPopup(auth, facebookProvider)
  .then((result) => {
    // The signed-in user info.
    const user = result.user;
    console.log(user)

    // This gives you a Facebook Access Token. You can use it to access the Facebook API.
    const credential = FacebookAuthProvider.credentialFromResult(result);
    const accessToken = credential.accessToken;

    $.ajax({
      type:"POST",
      url:"/loginByProvider",
      data:{
        "uid":user["uid"],
        "data":user["reloadUserInfo"]
      },
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function() {
        window.location = "/home"
      }
   })
    .fail(function(e) {
        // console.log(e)
        alert( "Posting failed." );
    });

    // ...
  })
  .catch((error) => {
    // Handle Errors here.
    const errorCode = error.code;
    const errorMessage = error.message;
    // The email of the user's account used.
    const email = error.customData.email;
    // The AuthCredential type that was used.
    const credential = FacebookAuthProvider.credentialFromError(error);

    // ...

    // console.log(errorMessage)
    // console.log(errorCode)
    // console.log(email)
    // console.log(credential)

    // if(errorCode === "auth/account-exists-with-different-credential"){
    //   var existingEmail = email
    //   var pendingCred = credential
    //   // Lookup existing account’s provider ID.
    //   fetchSignInMethodsForEmail(auth,existingEmail)
    //     .then((result) =>{
    //       console.log(result)
    //         // if (providers.indexOf(firebase.auth.EmailAuthProvider.PROVIDER_ID) != -1) {
    //         //   // Password account already exists with the same email.
    //         //   // Ask user to provide password associated with that account.
    //         //   var password = window.prompt('Please provide the password for ' + existingEmail);
    //         //   return firebase.auth().signInWithEmailAndPassword(existingEmail, password);    
    //         // } else if (providers.indexOf(firebase.auth.GoogleAuthProvider.PROVIDER_ID) != -1) {
    //         //   var googProvider = new GoogleAuthProvider();
    //         //   // Sign in user to Google with same account.
    //         //   provider.setCustomParameters({'login_hint': existingEmail});
    //         //   return firebase.auth().signInWithPopup(googProvider).then(function(result) {
    //         //     return result.user;
    //         //   });
    //         // } 
    //     })
    //     // .then((user) =>{
    //     //   console.log(user)
    //     //   // Existing email/password or Google user signed in.
    //     //   // Link Facebook OAuth credential to existing account.
    //     //   // return user.linkWithCredential(pendingCred);
    //     // });
    // }

  });
}

window.loginGoogle = () => {
  signInWithPopup(auth, googleProvider)
  .then((result) => {
    // This gives you a Google Access Token. You can use it to access the Google API.
    const credential = GoogleAuthProvider.credentialFromResult(result);
    const token = credential.accessToken;
    // The signed-in user info.
    const user = result.user;
    // console.log(user["reloadUserInfo"])
    console.log(user)

    // alert("test")
    $.ajax({
      type:"POST",
      url:"/loginByProvider",
      data:{
        "uid":user["uid"],
        "data":user["reloadUserInfo"]
      },
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function() {
        window.location = "/home"
      }
   })
    .fail(function(e) {
        // console.log(e)
        alert( "Posting failed." );
    });
    // ...
  }).catch((error) => {
    // Handle Errors here.
    console.log(error)
    const errorCode = error.code;
    const errorMessage = error.message;
    // The email of the user's account used.
    const email = error.customData.email;
    // The AuthCredential type that was used.
    const credential = GoogleAuthProvider.credentialFromError(error);
    // ...

    console.log(errorMessage)
    // console.log(errorCode)
    // console.log(email)
    // console.log(credential)

  });
}


window.onload = function() {
  render();
};
function render() {
  //   <div id="recaptcha-container" class="mb-4"></div>
  //recaptcha-container is an id of the place where you want to display the recaptcha
  window.recaptchaVerifier = new RecaptchaVerifier('sign-in-button', {
  //size of the recaptcha
  'size': 'invisible',
  'callback': (response) => {
      //response from recaptcha when successfull
      //alert the user t enter phone number
      // alert('Recaptacha successful!!! Please enter your phone number.')
      //the send otp button is enabled if it's successfull
      sendOTP()
  },
  'expired-callback': () => {
      //notify the user that the recaptcha has expired
      alert('Recaptach expired!!! Please try again.')
  }
}, auth);
//render the recaptcha
recaptchaVerifier.render();
}
window.sendOTP = function() {
  //get the user phone number
  var phoneNumber = $('input[name="phonenumber"]').val();
  //get the verified recaptcha
  const appVerifier = window.recaptchaVerifier;
  const auth = getAuth();
  //pass the auth, phoneNUmber and verifier to the signInWithPhoneNumber method
  signInWithPhoneNumber(auth, phoneNumber, appVerifier)
      .then((confirmationResult) => {
          //store the confirmation result
          window.confirmationResult = confirmationResult;
          // alert the user
          // alert('Verification code sent!!! Please check your phone.')
          //show verification code input section and hide phone number section
          $("#container-otp").removeClass("hidden").addClass("flex")

          $("#sign-in-button").html('OTP Terkirim').prop('disabled', true)

          setTimeout(() => {
            $("#sign-in-button").html('Send OTP Kembali').prop('disabled', false)
          }, 5000);
          
      }).catch((error) => {
          //If signInWithPhoneNumber results in an error, reset the reCAPTCHA so the user can try again:
          //reset the recaptcha if there's an error
          window.recaptchaVerifier.render().then(function(widgetId) {
              grecaptcha.reset(widgetId);
          });
          //you can add the error message to the user interface
          alert(error.message)
      });
}
window.verifyOTP = function() {
  //get the verification code entered by the user
  // const code = $("#verification_code").val();
  const code = $('input[name="OTP"]').val();

  confirmationResult.confirm(code).then((result) => {
      //if successful notify the user
      // alert('Code verification successfull!!! Awesome!')
      const user = result.user;
      console.log(user);
      //hide the verification input section
      $.ajax({
        type:"POST",
        url:"/loginByProvider",
        data:{
          "uid":user["uid"],
          "data":user["reloadUserInfo"]
        },
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function() {
          window.location = "/home"
        }
     })
      .fail(function(e) {
          // console.log(e)
          alert( "Posting failed." );
      });

  }).catch((error) => {
      //you can add the error message to the user interface
      alert(error.message)
  });
}
window.tryAgain = function() {

  //you can trigger the signOut function also
}
window.signOut = function() {
  //import signOut
  const auth = getAuth();
  signOut(auth).then(() => {
      // Sign-out successful.
      alert('Sign-out successful')
  }).catch((error) => {
      // An error happened.
      alert(error.message)
  });
}