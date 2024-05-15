<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" language="javascript">
        function get_book(){
            let xhr = new XMLHttpRequest();
            xhr.open('GET', 'https://localhost:7136/api/book/Books');
            xhr.send();
            xhr.onload = function(){
                let table = document.getElementById("outputTable");
                data = JSON.parse(xhr.responseText);
                data.forEach(function(item){
                    var row = document.createElement("tr");

                    var id = document.createElement("td");
                    id.textContent = item.Id;
                    row.appendChild(id);

                    var name = document.createElement("td");
                    name.textContent = item.Name;
                    row.appendChild(name);

                    var category = document.createElement("td");
                    category.textContent = item.Category;
                    row.appendChild(category);

                    var author = document.createElement("td");
                    author.textContent = item.Author;
                    row.appendChild(author);

                    var price = document.createElement("td");
                    price.textContent = item.Price;
                    row.appendChild(price);

                    table.appendChild(row)
                })
            }
        }

        window.onload = get_book;
    </script>
</head>
<body>
    <h1>Tabel Buku</h1>
    <table id="outputTable" border="1">
        <tr>
            <th>ID</th>
            <th>Judul Buku</th>
            <th>Kategori</th>
            <th>Penulis</th>
            <th>Harga</th>
        </tr>
    </table>
</body>
</html>