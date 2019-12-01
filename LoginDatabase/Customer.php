<?php
class Customer extends User{

    private $address;
    private $mobilenumber;

    public function view_orders(){
        if(@$_SESSION['userID']==""){
            header('location: login.php');
        
        $user_id=$_SESSION['userID'];
        $user_products_query="select it.id,it.name,it.price from users_items ut inner join items it on it.id=ut.item";
    }}

	public function __construct(){
		parent::__construct();
	}
	
    function __construct($address, $mobilenumber)
    {
        $stm = $this->connection->prepare_and_execute('SELECT * from users where id = ?', $_SESSION['user_id']);
        $result = $stm->fetch();

        $stm = $this->db->prepare_and_execute(
            'SELECT * from user_details where user_id = ?', $_SESSION['user_id']
            );
        $result = $stm->fetch();

        $this->address = $result['address'];
        $this->mobilenumber = $result['mobilenumber'];

    }

    public function setmobilenumber($dateOfBirth){
        $this->mobilenumber = $mobilenumber;
    }
	
	public function setaddress($address){
        $this->address = $address;
    }
    
    public function getaddress(){
        return $this->address;
    }
	
	public function getmobilenumber(){
        return $this->mobilenumber;
    }
}