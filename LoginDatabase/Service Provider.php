<?php
class ServiceProvider extends User{

    private $orders;
    private $mobilenumber;

    public function view_orders(){

        $no_of_user_products= mysqli_num_rows($user_products_result);
        if($no_of_user_products!=0){
        while($row=mysqli_fetch_array($user_products_result)){
            echo $row;
        }
    }
    }

	public function __connstruct(){
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

        $this->orders = $result['orders'];

    }

    public function setorder($dateOfBirth){
        $this->mobilenumber = $mobilenumber;
    }

    
    public function getorder(){
        return $this->address;
    }

}