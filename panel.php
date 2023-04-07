<!DOCTYPE html>
<html>

<head>
  <style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #customers td,
    #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #customers tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #customers tr:hover {
      background-color: #ddd;
    }

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }
  </style>
</head>

<body>


  <table id="customers">
    <tr>
      <th>Ad Soyad</th>
      <th>Telefon</th>
      <th>Email</th>
      <th>Konu</th>
      <th>Mesaj</th>
    </tr>
    <?php

    include("connect.php");

    $select = "Select * From iletisim"; //iletisim tablosundaki tum sutunlari sec
    $result = $connect->query($select);

    if ($result->num_rows > 0) //veri varsa -- satir sayisi 0dan buyukse
    {
      while ($pull = $result->fetch_assoc()) // tablodaki tum veriler alinir $pull dizisine atilir 
      {
        //  db deki degisken isimleri
        echo "
       <tr>
            <td>".$pull['ad_soyad']."</td>
            <td>".$pull['tel']."</td>
            <td>".$pull['email']."</td>
            <td>".$pull['konu']."</td>
            <td>".$pull['mesaj']."</td>
        </tr>
        ";
      }
    } else {
      echo "Veritabanında kayıtlı hiçbir veri bulunamamıştır.";
    }
    ?>


  </table>

</body>

</html>