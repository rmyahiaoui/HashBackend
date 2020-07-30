# HashBackend
##Installation de l'application
<ol>
    <li>composer install</li>
    <li>php bin/console doctrine:database:create</li>
    <li>php bin/console doctrine:migrations:migrate</li>
    <li>php bin/console doctrine:fixtures:load</li>
    <li>symfony server:start</li>
</ol>

<p>Remarque: vous pouvez testé l'api avec le lien suivant http://localhost:8000/api/</p>

