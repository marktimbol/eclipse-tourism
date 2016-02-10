<?php

namespace Eclipse\Mailers;

use App\Message;
use App\User;
use Eclipse\Repositories\Booking\BookingRepositoryInterface;
use Eclipse\Repositories\User\UserRepositoryInterface;

class AdminMailer extends Mailer {	

	protected $user;
	protected $booking;
	protected $adminEmail;

	public function __construct(UserRepositoryInterface $user, BookingRepositoryInterface $booking)
	{
		$this->user = $user;
		$this->booking = $booking;
		$this->adminEmail = config('eclipse.email');
	}

	public function sendPurchaseNotification(User $user, $bookingReference)
	{
		$subject = sprintf('%s: %s', config('eclipse.name'), 'New Online Booking Notification');
		$view = 'emails.admin.new-purchase-notification';
		$result = $this->booking->findByReference($bookingReference);
		$bookedPackages = $result->packages;
		$this->sendTo($this->adminEmail, $subject, $view, $user, $bookedPackages);
	}

	public function sendBookingNotification(User $user, $bookingReference)
	{
		$subject = sprintf('%s: %s', config('eclipse.name'), 'New Online Booking Notification.');
		$view = 'emails.admin.new-booking-notification';
		$result = $this->booking->findByReference($bookingReference);
		$bookedPackages = $result->packages;		
		$this->sendTo($this->adminEmail, $subject, $view, $user, $bookedPackages);
	}

	public function sendBookingNotificationPayment(User $user, $bookingReference)
	{
		$subject = sprintf('%s: %s', config('eclipse.name'), $user->name . ' paid his/her booking.');
		$view = 'emails.admin.new-paid-booking-notification';
		$result = $this->booking->findByReference($bookingReference);
		$bookedPackages = $result->packages;		
		$this->sendTo($this->adminEmail, $subject, $view, $user, $bookedPackages);
	}

	public function sendEnquiry(Message $message)
	{
		$subject = 'Enquiry from the website';
		$view = 'emails.admin.new-enquiry';
		$this->sendTo($this->adminEmail, $subject, $view, [], $message );
	}

}