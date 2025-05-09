<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border-collapse: separate; /* Убирает слияние границ ячеек */
            border-spacing: 15px; /* Устанавливает расстояние между ячейками */
        }
    </style>
    <title>Продукты</title>
</head>
<body>
<div id="content">
 <table>
  <tr>
   <th>id</th>
   <th>название</th>
   <th>цена</th>
   <th>количество</th>
   <th>описание</th>
  </tr>
  <?php foreach ($products as $products): ?>
  <tr>
   <td><?= $products['id']; ?></td>
   <td><?= $products['name']; ?></td>
   <td><?= $products['price']; ?></td>
   <td><?= $products['quantity']; ?></td>
   <td><?= $products['description']; ?></td>
  </tr>
  <?php endforeach; ?>
 </table>
</div>
</body>
</html>
