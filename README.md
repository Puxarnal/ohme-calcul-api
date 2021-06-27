# CalculApi

L'API pour tous vos calculs !

## Fonctionnalités

- [x] Addition

```
POST /api/add
{
    "number_1": 2
    "number_2": 3
}

RESPONSE: { "result": 5 }
```

ou

```
POST /api/add
{
    "numbers": [2, 3]
}

RESPONSE: { "result": 5 }
```

- [x] Multiplication

```
POST /api/multiply
{
    "number_1": 2
    "number_2": 3
}

RESPONSE: { "result": 6 }
```

ou

```
POST /api/multiply
{
    "numbers": [2, 3]
}

RESPONSE: { "result": 6 }
```

- [x] Soustraction

```
POST /api/substract
{
    "number_1": 3
    "number_2": 2
}

RESPONSE: { "result": 1 }
```

- [x] Division

```
POST /api/divide
{
    "number_1": 6
    "number_2": 2
}

RESPONSE: { "result": 3 }
```

- [x] Opérations imbriquées

```
POST /api/nested
{
    "operations": [[34, '+', 32], '/', 3]
}

RESPONSE: { "result": 22 }
```
