
var pass1E1 = document.querySelector("#password1")
var pass2E1 = document.querySelector("#password1")

function validatePasswords()
    {
    if (pass1El.value == pass2El.value)
    {
    pass1El.style.border = "2px solid green"  
    pass2El.style.border = "2px solid green"
        return true
    }
    else
    {
    pass1El.style.border = "2px solid red"
    pass2El.style.border = "2px solid red"
        return false
    }}
    pass1El.addEventListener("change", function(){
    validatePasswords()
    })

    pass2El.addEventListener("change", function(){
    validatePasswords()
    })
