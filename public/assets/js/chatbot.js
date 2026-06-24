/**
 * Faizan Ali Portfolio - AI Chatbot (Keyword Matching)
 * Fetches data from /chatbot-data endpoint
 */
document.addEventListener('DOMContentLoaded', function() {
    // Fetch chatbot data (JSON with suggestions & faqs)
    fetch('/chatbot-data')
        .then(response => {
            if (!response.ok) throw new Error('Network response was not ok');
            return response.json();
        })
        .then(data => {
            window.chatbotData = data;
            initChatbot();
        })
        .catch(error => {
            console.error('Chatbot: Could not load data.', error);
        });

    // ----------------------------------------------------------------
    function initChatbot() {
        // --- Create chatbot icon ---
        const icon = document.createElement('div');
        icon.id = 'chatbot-icon';
        icon.innerHTML = '💬';
        icon.setAttribute('aria-label', 'Open chat');
        document.body.appendChild(icon);

        // --- Create chatbot window ---
        const win = document.createElement('div');
        win.id = 'chatbot-window';
        win.innerHTML = `
            <div class="chatbot-header">
                <span>Faizan Ali - Ask me anything!</span>
                <button id="chatbot-close-btn" aria-label="Close chat">&times;</button>
            </div>
            <div class="chatbot-body" id="chatbot-body">
                <div class="chatbot-message bot-msg">
                    👋 Hi! I'm Faizan's virtual assistant. How can I help you?
                </div>
                <div class="chatbot-suggestions" id="chatbot-suggestions"></div>
            </div>
            <div class="chatbot-input">
                <input type="text" id="chatbot-input-field" placeholder="Type a keyword or question..." aria-label="Chat message" />
                <button id="chatbot-send-btn" aria-label="Send">Send</button>
            </div>
        `;
        document.body.appendChild(win);

        // --- Elements references ---
        const inputField = document.getElementById('chatbot-input-field');
        const sendBtn = document.getElementById('chatbot-send-btn');
        const closeBtn = document.getElementById('chatbot-close-btn');
        const chatBody = document.getElementById('chatbot-body');
        const suggestionsContainer = document.getElementById('chatbot-suggestions');

        // --- Load suggestion chips ---
        if (window.chatbotData && Array.isArray(window.chatbotData.suggestions)) {
            window.chatbotData.suggestions.forEach(question => {
                const chip = document.createElement('button');
                chip.className = 'ag-btn ag-btn-sm ag-btn-outline-primary chatbot-suggestion-chip';
                chip.textContent = question;
                chip.addEventListener('click', () => {
                    inputField.value = question;
                    sendMessage();
                });
                suggestionsContainer.appendChild(chip);
            });
        }

        // --- Toggle chat window ---
        icon.addEventListener('click', () => {
            win.style.display = win.style.display === 'flex' ? 'none' : 'flex';
            if (win.style.display === 'flex') {
                inputField.focus();
            }
        });

        // --- Close button ---
        closeBtn.addEventListener('click', () => {
            win.style.display = 'none';
        });

        // --- Send message on button click ---
        sendBtn.addEventListener('click', sendMessage);

        // --- Send message on Enter ---
        inputField.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') sendMessage();
        });

        /**
         * Main message sending flow
         */
        function sendMessage() {
            const message = inputField.value.trim();
            if (!message) return;

            // Add user message to chat
            addMessage('user', message);
            inputField.value = '';

            // Find best answer
            const answer = getBestAnswer(message);
            // Simulate small typing delay
            setTimeout(() => addMessage('bot', answer), 400);
        }

        /**
         * Find best matching answer from FAQ data
         */
        function getBestAnswer(userMsg) {
            const faqs = window.chatbotData?.faqs || [];
            if (faqs.length === 0) return "Sorry, I'm having trouble accessing my knowledge base.";

            const lowerMsg = userMsg.toLowerCase();

            // Search for matching keywords
            for (let faq of faqs) {
                if (faq.keywords.includes('default')) continue;
                const match = faq.keywords.some(kw => lowerMsg.includes(kw.toLowerCase()));
                if (match) return faq.answer;
            }

            // Fallback to default answer
            const defaultFaq = faqs.find(f => f.keywords.includes('default'));
            return defaultFaq ? defaultFaq.answer : "I'm not sure what you mean. Try asking about services, hiring, or projects.";
        }

        /**
         * Append a message to chat body
         */
        function addMessage(sender, text) {
            const msgDiv = document.createElement('div');
            msgDiv.className = `chatbot-message ${sender === 'user' ? 'user-msg' : 'bot-msg'}`;
            // Allow safe HTML (links etc.) from bot answers
            msgDiv.innerHTML = text;
            chatBody.appendChild(msgDiv);
            // Auto-scroll to bottom
            chatBody.scrollTop = chatBody.scrollHeight;
        }
    }
});