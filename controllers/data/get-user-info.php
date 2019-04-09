<?php 
          $query = $pdo->query('SELECT * FROM users');

          $users = $query->fetchAll();