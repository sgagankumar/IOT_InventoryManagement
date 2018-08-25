# IOT_InventoryManagement
RFID based inventory management using IOT


# INVENTORY MANAGEMENT USING RFID

display_loc.php	

    php file displays the location of the product 
		multiple RFID readers can be installed at various locations/storage facilities
		it keeps track of the location/storage facilty at which the product was last scanned.

inventory_loc.php

    php file keeps track of the inventory at a location/storage facility,
		it has the list of products present at that place.

inventory.ino

    Arduino program file, program that integrates ESP8266 NodeMCU with a RFID reader to read and keep track of the inventory.
		The products in the inventory are equipped with RFID tags. Which are tracked and automatically updated int the cloud
		database
