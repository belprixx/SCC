<?php exit; ?>
<<<<<<< HEAD
1463914025
=======
1463877579
>>>>>>> 0654335411776a68248f484b80e15835e6594b12
SELECT m.*, u.user_colour, g.group_colour, g.group_type FROM (phpbb_moderator_cache m) LEFT JOIN phpbb_users u ON (m.user_id = u.user_id) LEFT JOIN phpbb_groups g ON (m.group_id = g.group_id) WHERE m.display_on_index = 1
6
a:0:{}