<?php
// Configure o destinatário e o remetente do domínio antes de publicar.
return [
    'to' => getenv('PM_CONTACT_TO') ?: '',
    'from' => getenv('PM_CONTACT_FROM') ?: '',
];
