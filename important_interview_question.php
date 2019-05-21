<?php 
  1. Stack and Queue
  2. array merge, array filter, array walk
  3. Mysql Conditional query
  4. memory location of python and php
    5. REST API
    6. Token Refreshing
    7. Redis Architechture, why this is fast, and how they works
    8. git fetch and git pull
    9. how many state of AJAX
    10. what is ob_start()
    11. late static bindding
    12. closure function
    13. anonymus function
    14. Session and cookie related quetion
    15. How to make LRU system
    16. write a program to resize image
    17. payment gate ways..
    18. mysql fifth highest salary
    19. curl syntex and post method....
    20. oops concept , static member variable and static function how to call
    21. let and var diff in js
    22. INput out put.
    23. OOPS Concept
    24. how use .htaccess file....what are the uses.
    25. HTTPS/HTTP DIff
    26. IIS
    27. State less means
    28. Ajax State...
    29. Soup and Rest API
    
    
    To create a REST API, you need to follow six architectural constraints:

Uniform interface – Requests from different clients should look the same, for example, the same resource shouldn’t have more than one URI.

Client-server separation – The client and the server should act independently. They should interact with each other only through requests and responses.

Statelessness – There shouldn’t be any server-side sessions. Each request should contain all the information the server needs to know.

Cacheable resources – Server responses should contain information about whether the data they send is cacheable or not. Cacheable resources should arrive with a version number so that the client can avoid requesting the same data more than once.

Layered system – There might be several layers of servers between the client and the server that returns the response. This shouldn’t affect either the request or the response.

Code on demand [optional] – When it’s necessary, the response can contain executable code (e.g., JavaScript within an HTML response) that the client can execute.
