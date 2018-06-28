
<!DOCTYPE html>
<meta charset="UTF-8">
<style>
  #errorMessage {
    color: red;
  }
</style>
<form>
  <div id="errorMessage"></div>
  <label for="name">お名前:</label>
  <input name="name" id="name" required><br>
  <label for="date">生年月日:</label>
  <input type="date" name="calendar" max="9999-12-31" required><br>
  <label for="password">パスワード:</label>
  <input type="password" name="password" id="password" required><br>
  <label for="passwordConfirm">パスワード（確認）:</label>
  <input type="password" name="passwordConfirm" id="passwordConfirm" required><br>
  <input type="submit" value="送信">
</form>
<script>
  var form = document.forms[0];
  form.onsubmit = function() {
    // エラーメッセージをクリアする
    form.password.setCustomValidity("");
    // パスワードの一致確認
    if (form.password.value != form.passwordConfirm.value) {
      // 一致していなかったら、エラーメッセージを表示する
      form.password.setCustomValidity("パスワードと確認用パスワードが一致しません");
    }
  };
  // 入力値チェックエラーが発生したときの処理
  form.addEventListener("invalid", function() {
    document.getElementById("errorMessage").innerHTML = "入力値にエラーがあります";
  }, false);
</script>
</html>