<?php
/**
 * Chatbot widget – Faizan Ali Portfolio
 * 
 * Loads suggestion chips from data/chatbot.php and displays them
 * as clickable buttons inside the chat window.
 */

// Load chatbot data to get suggestions
$chatbotData = require DATA_PATH . '/chatbot.php';
$suggestions = $chatbotData['suggestions'] ?? [];
?>
<!-- ========== CHATBOT WIDGET ========== -->
<!-- Floating Action Button -->
<div id="chatbot-icon">💬</div>

<!-- Chat Window (hidden by default) -->
<div id="chatbot-window">
    <div class="chatbot-header">
        <span>Faizan Ali – Ask me anything!</span>
        <button id="chatbot-close-btn" aria-label="Close chat">&times;</button>
    </div>
    <div class="chatbot-body" id="chatbot-body">
        <!-- Initial message -->
        <div class="chatbot-message bot-msg">
            👋 Hi! I'm Faizan's virtual assistant. How can I help you?
        </div>

        <!-- Predefined question chips (populated from data/chatbot.php) -->
        <?php if (!empty($suggestions)): ?>
        <div class="chatbot-suggestions" id="chatbot-suggestions">
            <?php foreach ($suggestions as $question): ?>
                <button class="chatbot-suggestion-chip" type="button"><?= htmlspecialchars($question) ?></button>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <!-- More messages are injected here by JS -->
    </div>
    <div class="chatbot-input">
        <input type="text" id="chatbot-input-field" placeholder="Type a keyword..." aria-label="Chat message" />
        <button id="chatbot-send-btn">Send</button>
    </div>
</div>