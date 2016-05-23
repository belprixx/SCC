<?php exit; ?>
<<<<<<< HEAD
1463992872
=======
1463992879
>>>>>>> f816bb28219d6ad4eb10369efd0048d3e32e3fa9
SELECT m.*, u.user_colour, g.group_colour, g.group_type FROM (phpbb_moderator_cache m) LEFT JOIN phpbb_users u ON (m.user_id = u.user_id) LEFT JOIN phpbb_groups g ON (m.group_id = g.group_id) WHERE m.display_on_index = 1
6
a:0:{}