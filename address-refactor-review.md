# Address Refactor Review

The database contains table ‘address’

```
CREATE TABLE `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(3) NOT NULL,
  `postcode` varchar(6) NOT NULL,
  `country` varchar(3) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) 
```

Additional fields ?

## Tables already refactored to use this table:

```
orders
  shipping_address_id
  billing_address_id
  residential_address_id
```

## Tables with full address fields matching the address table:

```
contact
*appears to be postal
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(32) DEFAULT NULL,
  `state` varchar(24) DEFAULT NULL,
  `postcode` varchar(8) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
```

```
contact_indiv_data
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(32) DEFAULT NULL,
  `state` varchar(24) DEFAULT NULL,
  `postcode` varchar(8) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,

  `residence_address1` varchar(255) DEFAULT NULL,
  `residence_address2` varchar(255) DEFAULT NULL,
  `residence_city` varchar(64) DEFAULT NULL,
  `residence_state` varchar(24) DEFAULT NULL,
  `residence_postcode` varchar(16) DEFAULT NULL,
  `residence_country` varchar(255) DEFAULT NULL,
```

note: contact_indiv_data is used with a type of ‘attendance’ to store AVETMISS RTO records through the event_attendance.rto_data field and with a type of ‘contact’ to extend the contact table. This dual purposing leads to different data between the two types of record (eg. postal is not used in the ‘contact’ type, as this info is in the main contact table)

## Tables with partial address fields not currently matching the address table:

```
abstract_submission_presenter
  address VARCHAR(128)

geo_location
  address VARCHAR(128)
  state VARCHAR(32)

awards_aurora
  `address` varchar(127) NOT NULL

awards_crana
  `address` varchar(255) NOT NULL
```

## Geolocation table

The database contains table ‘geo_location’, which has fields related to the address table

```
CREATE TABLE `geo_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) DEFAULT NULL,
  `locality` varchar(255) DEFAULT NULL,
  `state` varchar(32) DEFAULT NULL,
  `location_label` varchar(255) DEFAULT NULL,
  `coordinates` varchar(64) DEFAULT NULL,
  `coordinates_latitude` varchar(32) DEFAULT NULL,
  `coordinates_longitude` varchar(32) DEFAULT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) 
```
## Tables already refactored to use this table:

```
course_location
  `geoLocation_id` int(11) DEFAULT NULL,

course_waitinglist
  `geoLocation_id` int(11) DEFAULT NULL,
```

## Tables with full geo location fields matching the geo_location table:

```
contact
  `geolocation_latitude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `geolocation_longitude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `geolocation_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `geolocation_address_override` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state`
```
