<?php
/**
 *
 * @author Johan Groth
 *
 */
class BankAccount {
	protected $balance = 0;

	/**
	 *
	 */
	public function getBalance() {
		return $this->balance;
	}

	/**
	 *
	 * @param unknown $balance
	 * @throws BankAccountException
	 */
	protected function setBalance($balance) {
		if ($balance >= 0) {
			$this->balance = $balance;
		} else {
			throw new BankAccountException;
		}
	}

	/**
	 *
	 * @param unknown $balance
	 * @return number
	 */
	public function depositMoney($balance) {
		$this->setBalance($this->getBalance() + $balance);

		return $this->getBalance();
	}

	/**
	 *
	 * @param unknown $balance
	 * @return number
	 */
	public function withdrawMoney($balance) {
		$this->setBalance($this->getBalance() - $balance);

		return $this->getBalance();
	}
}

class BankAccountException extends Exception {}