<style>
    .signModal {
        position: absolute;
        top: -200px;
        right: 10px;
        height: 150px;
        width: 250px;
        border-bottom-left-radius: 7px;
        border-bottom-right-radius: 7px;
        box-shadow: 0 0 10px rgb(50, 50, 50);
        background: rgba(255, 255, 255, 0.7);
        transition-duration: 500ms;
        z-index: 99;
        padding-top: 20px;
    }
    .signInp, .signBtn {
        display: block;
        width: 90%;
        margin-left: 5%;
        margin: 10px;
        padding: 5px;
        outline: none;
        border-radius: 9px;
        border: 1px solid rgb(12, 77, 162);
        color: rgb(12, 77, 162);
        transition-duration: 500ms;
    }
    .signBtn {
        background: rgb(12, 77, 162);
        color: rgb(255, 255, 255);
    }
    .sing:focus {
        box-shadow: 0 0 10px rgb(50, 50, 50);
    }
</style>
<div class="signModal">
    <form action="core/libs/sign/signIn" method="POST">
        <label for="login">
            <input type="text" class="signInp sing" id="login" name="login" placeholder="Логин" autocomplete="off" required>
        </label>
        <label for="pass">
            <input type="password" class="signInp sing" id="pass" name="pass" placeholder="Пароль" autocomplete="off" required>
        </label>
        <input type="submit" class="signBtn sing" name="sign" value="Войти">
    </form>
</div>
<script>
    function getSignModal() {
        let modalBtn = document.querySelector('.signModal');
        if(modalBtn.style.top == '100px') {
            modalBtn.style.top = '-200px';
        } else {
            modalBtn.style.top = '100px';
        }
    }
</script>