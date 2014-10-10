# Heere Lye Straynge & Exotyc Troubbles Explayn'd

## EntityNotFoundException in ProxyFactory
### Discriminator columns blank or incorrect 
### … possible failure to update db with migrations or schema:update

```
Entity was not found.
500 Internal Server Error - EntityNotFoundException

in /Users/ben/PhpstormProjects/cranaplus-db/vendor/doctrine/orm/lib/Doctrine/ORM/Proxy/ProxyFactory.php at line 177
                $proxy->__setCloner($cloner);
                $proxy->__setInitialized(false);
                throw new EntityNotFoundException();
            }
        };
    }
```

## Session id too long or contains illegal characters
### Cookies are corrupted

```
Warning: session_start(): The session id is too long or contains illegal characters, valid characters are a-z, A-Z, 0-9 and '-,' in classes.php on line 105
```

- go to browser dev tools > resources > cookies > delete all



... to be continued
