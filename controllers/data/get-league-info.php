<?php 
          $query = $pdo->query('SELECT * FROM leagues');

          $leagues = $query->fetchAll();