
DROP TABLE IF EXISTS `csvdata`;
CREATE TABLE IF NOT EXISTS `csvdata` (
  `source_id` int(255) DEFAULT NULL,
  `source_status` varchar(100) DEFAULT NULL,
  `source_name` varchar(100) DEFAULT NULL,
  `source_desc` varchar(20) DEFAULT NULL,
  `source_address_road` varchar(255) DEFAULT NULL,
  `source_address_zip` int(255) DEFAULT NULL,
  `source_address_city` varchar(50) DEFAULT NULL,
  `source_external_id` varchar(150) DEFAULT NULL,
  `source_latitude` varchar(200) DEFAULT NULL,
  `source_longitude` varchar(200) DEFAULT NULL
)

