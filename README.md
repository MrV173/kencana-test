# Introduction

---

This is an explanation of each answer to the questions previously given

1. the answer for question no.1 is on file table.json

   ```json
   {
     "master_po": {
       "kode_po": 1,
       "no_po": 2000000001,
       "tgl_po": "2020-09-24",
       "total_po": 232500.0,
       "approval": "Y",
       "tgl_approval": "2020-10-11",
       "userid": "Agus"
     },

     "detail_po": [
       {
         "kode_po": 1,
         "id_po": 0,
         "kode_item": "I.00000018",
         "deskripsi": "BB 4.2",
         "satuan": "BTG",
         "qty": 45,
         "harga": "2,500.00"
       },
       {
         "kode_po": 1,
         "id_po": 1,
         "kode_item": "I.00000218",
         "deskripsi": "BB 4.7",
         "satuan": "BTG",
         "qty": 21,
         "harga": "5000.00"
       },
       {
         "kode_po": 1,
         "id_po": 2,
         "kode_item": "I.000000312",
         "deskripsi": "BB 16 PSI",
         "satuan": "BTG",
         "qty": 10,
         "harga": "1,500.00"
       }
     ]
   }
   ```

---

2. the answer for question no.2 is on file pseudocode.txt and flowchart.drawio.png. for test the code, i make the code in file deret_bilangan.php .
   run this code in your terminal

   ```bash
   php deret_bilangan.php
   ```

   ### pseudocode

   ```txt
   1. Input angka_pertama
   2. Input angka_kedua
   3. Input x
   6. Inisialisasi selisih = angka_kedua - angka_pertama
   7. Inisialisasi variable i = 1
   8. While i <= x:
       a. Print angka_pertama
       b. angka_pertama = angka_pertama + selisih
       c. i = i + 1
   ```

   ### Flowchart

   ![Flowchart](./flowchart.drawio.png)

---

3. the answer for question no.3 is on file class_data.php. run this code in your terminal

   ```bash
   php class_data.php
   ```

   ```php

   <?php

   class Data {
   private $name;
   private $age;

   function __construct($name, $age) {
       $this->name = $name;
       $this->age = $age;
   }

   function getName() {
       return $this->name;
   }

   function isAdult() {
       return $this->age >= 18 ? "an Adult" : "Not an Adult";
   }
   }

   $calvin = new Data("Calvin", 13); //change the age to test the function
   $chris = new Data("Chris", 19);   //change the age to test the function

   echo "Hello, " . $calvin->getName() . "! You are " . $calvin->isAdult() . PHP_EOL;
   echo "Hello, " . $chris->getName() . "! You are " . $chris->isAdult() . PHP_EOL;

   ?>

   ```

---

4.  the answer for question no.4 i save the query result on file query_result.json. For the query sql i write it on query_omzet.txt

    ### Query SQL

    ```sql

        WITH DateRange AS (
        SELECT '2021-11-01' AS date
        UNION SELECT '2021-11-02'
        UNION SELECT '2021-11-03'
        UNION SELECT '2021-11-04'
        UNION SELECT '2021-11-05'
        UNION SELECT '2021-11-06'
        UNION SELECT '2021-11-07'
        UNION SELECT '2021-11-08'
        UNION SELECT '2021-11-09'
        UNION SELECT '2021-11-10'
        UNION SELECT '2021-11-11'
        UNION SELECT '2021-11-12'
        UNION SELECT '2021-11-13'
        UNION SELECT '2021-11-14'
        UNION SELECT '2021-11-15'
        UNION SELECT '2021-11-16'
        UNION SELECT '2021-11-17'
        UNION SELECT '2021-11-18'
        UNION SELECT '2021-11-19'
        UNION SELECT '2021-11-20'
        UNION SELECT '2021-11-21'
        UNION SELECT '2021-11-22'
        UNION SELECT '2021-11-23'
        UNION SELECT '2021-11-24'
        UNION SELECT '2021-11-25'
        UNION SELECT '2021-11-26'
        UNION SELECT '2021-11-27'
        UNION SELECT '2021-11-28'
        UNION SELECT '2021-11-29'
        UNION SELECT '2021-11-30'

        )

        SELECT
        m.merchant_name,
        o.outlet_name,
        COALESCE(SUM(t.bill_total), 0) AS omzet_by_day,
        FROM
        DateRange d
        CROSS JOIN
        Merchants m
        JOIN
        Outlets o ON m.id = o.merchant_id
        LEFT JOIN
        Transactions t ON m.id = t.merchant_id
        AND o.id = t.outlet_id
        AND DATE(t.created_at) = d.date
        WHERE
        m.user_id = (SELECT id FROM Users WHERE user_name = 'admin1')
        GROUP BY
        m.merchant_name, o.outlet_name, d.date
        ORDER BY
        m.merchant_name, o.outlet_name, d.date;

    ```

    ### Query results in JSON

    ```json
    {
      "report": [
        {
          "Outlet 1": [
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 4500
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 4000
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 1000
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 7000
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 0,
              "transaction_date": "2021-11-03"
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 1",
              "omzet_by_day": 0
            }
          ]
        },
        {
          "Outlet 2": [
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 2000
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 2500
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 5000
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 7000
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 0
            },
            {
              "merchant_name": "merchant 1",
              "outlet_name": "Outlet 2",
              "omzet_by_day": 0
            }
          ]
        }
      ]
    }
    ```
