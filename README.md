# iot_collector
## pgsql 

```
CREATE TABLE sensors (
	id serial4 NOT NULL,
	"location" varchar NOT NULL,
	"key" varchar NOT NULL,
	value int4 NOT NULL,
	device varchar NOT NULL,
	CONSTRAINT sensors_pkey PRIMARY KEY (id)
);
```
