select `book_libraries`.*,
       `books`.`library_id` as `laravel_through_key`
from `book_libraries`
         inner join `books` on `books`.`id` = `book_libraries`.`book_id`
where `books`.`library_id` is null limit 1
