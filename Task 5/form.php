<form action="upload.php" method="post" enctype="multipart/form-data">

    <!-- Виберіть файл для завантаження: -->
    <label for="fileToUpload">Виберіть файл для завантаження:<br>
        <input type="file" name="fileToUpload" id="fileToUpload">
    </label>
    <br>

    <!-- Поле для введення назви файлу -->
    <label for="fileName">Назва файлу (необов'язково):<br>
        <input type="text" name="fileName" id="fileName">
    </label>
    <br>
    
    <!-- Кнопка для завантаження файлу -->
    <input type="submit" value="Завантажити файл" name="submit">

</form>
