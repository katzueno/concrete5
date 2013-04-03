<?php defined('C5_EXECUTE') or die("Access Denied.");

class Concrete5_Model_UpVoteConversationRatingType extends ConversationRatingType {

	public function outputRatingTypeHTML() {
		print '<i data-conversation-rating-type="up_vote" class="icon-thumbs-up conversation-rate-message"></i>';
	}
	
	public function rateMessage() {
		
	}

	public function adjustConversationMessageRatingTotalScore(ConversationMessage $message) {
		$db = Loader::db();
		$db->Execute('update ConversationMessages set cnvMessageTotalRatingScore = cnvMessageTotalRatingScore + 1 where cnvMessageID = ?', array(
			$message->getConversationMessageID()
		));
	}

}