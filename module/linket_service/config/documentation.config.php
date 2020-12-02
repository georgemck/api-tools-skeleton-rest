<?php
return [
    'linket_service\\V1\\Rest\\Status\\Controller' => [
        'description' => 'Create, manipulate, and retrieve status messages',
        'collection' => [
            'description' => 'Manipulate lists of status messages',
            'GET' => [
                'description' => 'Retrieve a paginated list of status messages',
                'response' => '{
   "_links": {
       "self": {
           "href": "/status"
       },
       "first": {
           "href": "/status?page={page}"
       },
       "prev": {
           "href": "/status?page={page}"
       },
       "next": {
           "href": "/status?page={page}"
       },
       "last": {
           "href": "/status?page={page}"
       }
   }
   "_embedded": {
       "status": [
           {
               "_links": {
                   "self": {
                       "href": "/status[/:status_id]"
                   }
               }
              "message": "A status message of n more than 140 characters",
              "user": "The user submitting the status message.",
              "timestamp": "The timestamp when the status message was last modified."
           }
       ]
   }
}',
            ],
            'POST' => [
                'description' => 'Create a new status messages',
                'request' => '{
   "message": "A status message of n more than 140 characters",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/status[/:status_id]"
       }
   }
   "message": "A status message of n more than 140 characters",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
            ],
        ],
        'entity' => [
            'description' => 'Manipulate and retrieve individual status messages',
            'GET' => [
                'description' => 'Retrieve a status message',
                'response' => '{
   "_links": {
       "self": {
           "href": "/status[/:status_id]"
       }
   }
   "message": "A status message of n more than 140 characters",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
            ],
            'PATCH' => [
                'description' => 'Update a status message',
                'request' => '{
   "message": "A status message of no more than 140 characters",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/status[/:status_id]"
       }
   }
   "message": "A status message of n more than 140 characters",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
            ],
            'PUT' => [
                'description' => 'Replace a status message',
                'request' => '{
   "message": "A status message of no more than 140 characters",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/status[/:status_id]"
       }
   }
   "message": "A status message of no more than 140 characters",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
            ],
            'DELETE' => [
                'description' => 'Delete a status message',
                'request' => '{
   "message": "A status message of no more than 140 characters",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/status[/:status_id]"
       }
   }
   "message": "A status message of n more than 140 characters",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
            ],
        ],
    ],
];
