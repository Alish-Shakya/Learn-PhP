<?php
class BankAccount {
    private $balance = 0;

    public function deposit($amount){
        $this->balance += $amount;
    }

    public function withdraw($amount){
        if ($amount <= $this->balance){
            $this->balance -= $amount;
        } else {
            echo "Insufficient funds <br>";
        }
    }

    public function getBalance(){
        return $this->balance;
    }

    protected function calculateInterest(){
        return $this->balance * 0.05;
    }
}

$acc = new BankAccount();
$acc->deposit(500);
$acc->withdraw(200);
echo "Current Balance: " . $acc->getBalance();
?>
