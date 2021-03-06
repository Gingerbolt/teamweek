<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */
    require_once "src/Customer.php";

    $server = 'mysql:host=localhost:8889;dbname=moes_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);
    class CustomerTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            Customer::deleteAll();
        }
        function testGetContact()
        {
            //Arrange
            $contact = "Alex";
            $business = "SunStream";
            $address = "2500 SW Marginal Ave";
            $phone = '5039890787';
            $email = "Sunstreamer@sunstreamdream.biz";
            $test_customer = new Customer($contact, $business, $address, $phone, $email);
            //Act
            $result = $test_customer->getContact();
            //Assert
            $this->assertEquals($contact, $result);
        }
        function testSetContact()
        {
            $contact = "Saul";
            $business = "SunMonkey";
            $address = "2500 NE Marginal Ave";
            $phone = '5039834852';
            $email = "Sundreamer@sunstreamdream.biz";
            $test_customer = new Customer($contact, $business, $address, $phone, $email);
            $new_contact = "Shaz";

            $test_customer->setContact($new_contact);
            $result = $test_customer->getContact();

            $this->assertEquals($new_contact, $result);
        }

        function testGetBusiness()
        {
            //Arrange
            $contact = "Alekx";
            $business = "SunMoon";
            $address = "2500 SW Monumental Ave";
            $phone = '5839890787';
            $email = "Noprogress.biz";
            $test_customer = new Customer($contact, $business, $address, $phone, $email);
            //Act
            $result = $test_customer->getBusiness();
            //Assert
            $this->assertEquals($business, $result);
        }

        function testSetBusiness()
        {
            $contact = "Saukl";
            $business = "DumbMonkey";
            $address = "2500 NE Tanal Ave";
            $phone = '50398348245';
            $email = "Sunchaser@sunstreamdream.biz";
            $test_customer = new Customer($contact, $business, $address, $phone, $email);
            $new_business = "Shaz";

            $test_customer->setBusiness($new_business);
            $result = $test_customer->getBusiness();

            $this->assertEquals($new_business, $result);
        }

        function testGetAddress()
        {
            //Arrange
            $contact = "Alekx";
            $business = "SunMoon";
            $address = "2500 SW Monumental Ave";
            $phone = '5839890787';
            $email = "Noprogress.biz";
            $test_customer = new Customer($contact, $business, $address, $phone, $email);
            //Act
            $result = $test_customer->getAddress();
            //Assert
            $this->assertEquals($address, $result);
        }

        function testSetAddress()
        {
            $contact = "Saukl";
            $business = "DumbMonkey";
            $address = "2500 NE Tanal Ave";
            $phone = '50398348245';
            $email = "Sunchaser@sunstreamdream.biz";
            $test_customer = new Customer($contact, $business, $address, $phone, $email);
            $new_address = "23423 Jawasz";

            $test_customer->setAddress($new_address);
            $result = $test_customer->getAddress();

            $this->assertEquals($new_address, $result);
        }

        function testGetPhone()
        {
            //Arrange
            $contact = "Alekx";
            $business = "SunMoon";
            $address = "2500 SW Monumental Ave";
            $phone = '5839890787';
            $email = "Noprogress.biz";
            $test_customer = new Customer($contact, $business, $address, $phone, $email);
            //Act
            $result = $test_customer->getPhone();
            //Assert
            $this->assertEquals($phone, $result);
        }

        function testSetPhone()
        {
            $contact = "Saukl";
            $business = "DumbMonkey";
            $address = "2500 NE Tanal Ave";
            $phone = '50398348245';
            $email = "Sunchaser@sunstreamdream.biz";
            $test_customer = new Customer($contact, $business, $address, $phone, $email);
            $new_phone = '1234567890';

            $test_customer->setPhone($new_phone);
            $result = $test_customer->getPhone();

            $this->assertEquals($new_phone, $result);
        }

        function testGetEmail()
        {
            //Arrange
            $contact = "Alekx";
            $business = "SunMoon";
            $address = "2500 SW Monumental Ave";
            $phone = '5839890787';
            $email = "Noprogress.biz";
            $test_customer = new Customer($contact, $business, $address, $phone, $email);
            //Act
            $result = $test_customer->getEmail();
            //Assert
            $this->assertEquals($email, $result);
        }

        function testSetEmail()
        {
            $contact = "Saukl";
            $business = "DumbMonkey";
            $address = "2500 NE Tanal Ave";
            $phone = '50398348245';
            $email = "Sunchaser@sunstreamdream.biz";
            $test_customer = new Customer($contact, $business, $address, $phone, $email);
            $new_email = "Shaz@shazatazz.com";

            $test_customer->setEmail($new_email);
            $result = $test_customer->getEmail();

            $this->assertEquals($new_email, $result);
        }

        function testGetId()
        {
            $contact = "Saupl";
            $business = "ThumbMonkey";
            $address = "2555 NE Tanal Ave";
            $phone = '50394738245';
            $email = "Sunfollower@sunstreamdream.biz";
            $test_customer = new Customer($contact, $business, $address, $phone, $email);
            $test_customer->save();

            $result = $test_customer->getId();

            $this->assertTrue(is_numeric($result));
        }

        function testSave()
        {
            $contact = "Saupl";
            $business = "ThumbMonkey";
            $address = "2555 NE Tanal Ave";
            $phone = '50394738245';
            $email = "Sunfollower@sunstreamdream.biz";
            $test_customerino = new Customer($contact, $business, $address, $phone, $email);
            $executed = $test_customerino->save();
            $this->assertTrue($executed, "Contact not successfully saved to database");
        }
        function testDeleteAll()
        {
            $contact = "Flipper";
            $business = "Flopper";
            $address = "666 weenie bopper";
            $phone = '50338438245';
            $email = "Magicalponies@haskos.edu";
            $test_customer = new Customer($contact, $business, $address, $phone, $email);
            $test_customer->save();
            $contact_2 = "Krang";
            $business_2 = "Kodos";
            $address_2 = "283 Ravens flight";
            $phone_2 = '501238438245';
            $email_2 = "Monkeyflight@frank.com";
            $test_customer_2 = new Customer($contact_2, $business_2, $address_2, $phone_2, $email_2);
            $test_customer_2->save();

            Customer::deleteAll();
            $result = Customer::getAll();

            $this->assertEquals([], $result);
        }
        function testGetAll()
        {
            $contact = "Flipper";
            $business = "Flopper";
            $address = "666 weenie bopper";
            $phone =  '50338438245';
            $email = "Magicalponies@haskos.edu";
            $test_customer = new Customer($contact, $business, $address, $phone, $email);
            $test_customer->save();

            $contact_2 = "Krang";
            $business_2 = "Kodos";
            $address_2 = "283 Ravens flight";
            $phone_2 =  '501238438245';
            $email_2 = "Monkeyflight@frank.com";
            $test_customer_2 = new Customer($contact_2, $business_2, $address_2, $phone_2, $email_2);
            $test_customer_2->save();

            $result = Customer::getAll();

            $this->assertEquals([$test_customer, $test_customer_2], $result);
        }

        function testFind()
        {
            $contact = "Lisa";
            $business = "Simpsons";
            $address = "666 Flanders";
            $phone =  '5394438245';
            $email = "Magicashmeee@jesu.edu";
            $test_customer = new Customer($contact, $business, $address, $phone, $email);
            $test_customer->save();

            $contact_2 = "Blergh";
            $business_2 = "Blarmo";
            $address_2 = "283 Raver fall";
            $phone_2 =  '501238427845';
            $email_2 = "Mkendo@frank.com";
            $test_customer_2 = new Customer($contact_2, $business_2, $address_2, $phone_2, $email_2);
            $test_customer_2->save();

            $result = Customer::find($test_customer->getId());
            $this->assertEquals($test_customer, $result);
        }

        // function testUpdate()
        // {
        //     $contact = "Lisa";
        //     $business = "Simpsons";
        //     $address = "666 Flanders";
        //     $phone =  '5394438245';
        //     $email = "Magicashmeee@jesu.edu";
        //     $test_customer = new Customer($contact, $business, $address, $phone, $email);
        //     $new_contact = "Sneaks";
        //     $new_
        //     $test_brand->update($new_brand);
        //     $this->assertEquals("Sneaks", $test_brand->getBrand());
        // }


    }
?>
