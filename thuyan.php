<HOC_PHP>
    <!DOCTYPE HTML> <HTML> <HEAD> 
    <BODY> 
    <?PHP 
    echo "HELLO EVERYONE";
    ?>
     <h1>Liên Lạc</h1>
        <p>Hãy liên hệ với tôi thông qua mẫu liên hệ dưới đây:</p>
        <form action="xu_ly_lien_he.php" method="post">
            <div class="form-field">
                <label for="ten">Tên:</label>
                <input type="text" name="ten" id="ten">
            </div>
            <div class="form-field">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="form-field">
                <label for="noi_dung">Nội Dung:</label>
                <textarea name="noi_dung" id="noi_dung" rows="4" cols="50"></textarea>
            </div>
            <input type="submit" value="Gửi">
        </form>
    </body>
    </html>