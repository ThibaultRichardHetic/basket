<?php 
          $query = $pdo->query('SELECT * FROM league_users');

          $league_users = $query->fetchAll();