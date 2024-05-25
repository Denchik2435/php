<?php
    include 'form.php';
    include 'upload.php';
    include './functions/listFiles.php';
    $location = 'uploads';
    listFiles($location);
    ?>
<h3>
    Завдання 5: Завантаження файлів на сервер
</h3>
<p>
    Модифікуйте даний скрипт наступним чином:
</p>
<ul>
    <li>
        ✔ Створити підпапки /images та /docs в папці uploads
    </li>
    <li>
        ✔ Додайте можливість завантаження файлів з розширенням <b>.txt, .doc, .docx, .pdf</b> та <b>.jpg, .jpeg, .png,
            .gif</b>
    </li>
    <li>
        ✔ Картинки зберігати в папці /images, а документи в папці /docs
    </li>
    <li>
        ✔ Виведіть список файлів, які знаходяться в папці <b>uploads</b> та підпапках /images та /docs
    </li>
    <li>
        Змініть форму додавши input для надання назви файлу
    </li>
    <li>
        Додайте до назви файлу дату та час завантаження, наприклад: <b>file_2020-12-31_23-59-59.jpg</b>
    </li>
    <li>
        Додайте можливість видалення файлів через GET параметр <b>file</b>
    </li>
</ul>
