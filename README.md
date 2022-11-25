# iot_collector
## pgsql 

```
CREATE TABLE public.sensors (
	id serial4 NOT NULL,
	"location" varchar NOT NULL,
	"key" varchar NOT NULL,
	value float4 NOT NULL,
	device varchar NOT NULL,
	data_created timestamp NULL DEFAULT now(),
	CONSTRAINT sensors_pkey PRIMARY KEY (id)
);
```
