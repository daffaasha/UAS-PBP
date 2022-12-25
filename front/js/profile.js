const logout = document.getElementById("poppup-logout")
const confirm = document.getElementById("poppup-confirm")
const done = document.getElementById("poppup-done")

function logoutPoppup() {
    logout.classList.add("open-poppup")
}

function logoutPoppupCls() {
    logout.classList.remove("open-poppup")
}

function confirmPoppup() {
    confirm.classList.add("open-poppup")
}

function confirmPoppupCls() {
    confirm.classList.remove("open-poppup")
}

function donePoppup() {
    done.classList.add("open-poppup")
}

function donePoppupCls() {
    done.classList.remove("open-poppup")
    confirm.classList.remove("open-poppup")
}