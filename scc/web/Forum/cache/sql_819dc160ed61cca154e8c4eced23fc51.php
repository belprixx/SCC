<?php exit; ?>
<<<<<<< HEAD
1463991203
=======
1463989783
>>>>>>> d5de726d37e3a8b92cada471b263307e7bf0389c
SELECT m.*, u.user_colour, g.group_colour, g.group_type FROM (phpbb_moderator_cache m) LEFT JOIN phpbb_users u ON (m.user_id = u.user_id) LEFT JOIN phpbb_groups g ON (m.group_id = g.group_id) WHERE m.display_on_index = 1
6
a:0:{}