# DummyGenerator Providers

This repository contains 3 providers for DummyGenerator:

* en_US
* en_GB
* pl_PL

## How to use them

Just put `src` somewhere your autoload can pick it's content and then:

```php
    $container = \DummyGenerator\Container\DefinitionContainerBuilder::all(); // initialize the container with all core extensions
   
    $en_US_pack = new DummyGenerator\Provider\en_US\DefinitionPack; // Provider definitions pack
    
    foreach ($en_US_pack->all() as $id => $class) { // add all extensions
        $container->add($id, $class);
    }
    
    $generator = new \DummyGenerator\DummyGenerator($container); // create generator
    echo $generator->state() // i.e. "Arkansas"
```

Of course, you can create another DummyGenerator instance and add another provider, i.e. `en_GB` and use them at the same time, one will give you `en_US` data, the other `en_GB`.


