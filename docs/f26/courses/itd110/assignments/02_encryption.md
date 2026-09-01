# Asymmetric Encryption Project

For this project, you'll explore a complex, modern application-layer protocol that includes encryption, the Signal Protocol, which 
is used inside of WhatsApp, Facebook Messenger, Google Messages, and many others (iMessage is similar but not exactly the same).

Signal uses a variety of strategies to protect communication, and those strategies use just about everything that we've
learned in this unit. We'll touch on many of them in this project.

As an overview, in this project you'll work with a partner to simulate how messages are sent:
 - you'll start by using **asymmetric encryption** to come up with a shared secret
 - After you and your partner have the same shared secret, you'll use it to encode and decode messages
 - Signal uses a new shared secret for every message, so you'll use some simple math to generate a new key for each message
 - After you've exchanged messages, you'll write a short reflection connecting this activity to the concepts we've
 learned in this unit.

### Part 1: Asymmetric Key Exchange - Signing

1. **Make a new directory for this activity:**
   Start by making sure that you're in your GitHub repository where you'll store all the files for this activity.

   (You might need to change this line to match your GitHub repository folder name)
      ```bash
      cd ~/Desktop/website/projects
      mkdir encryption 
      cd encryption
      ```

2. **Download and run the asymmetric encryption script:**
   I wrote a command line tool that will encrypt messages for you. To download it, there are two steps:

      - Use the `curl` command to download the script:
         ```bash
         curl -s -O https://ict.gctaa.net/f25/courses/itd110/goals/resources/ssh_activity/encrypt_message.sh
         ```

      - To protect your computer, by default downloaded scripts aren't allowed to run. This code makes the script executable:

         ```bash
         chmod +x encrypt_message.sh
         ```

      - While you're here, go ahead and download the matching decryption script that you'll use later:

         ```bash
         curl -s -O https://ict.gctaa.net/f25/courses/itd110/goals/resources/ssh_activity/decrypt_message.sh
         
         chmod +x decrypt_message.sh
         ```

3. **Run the asymmetric encryption script:**
   
      Execute the script, which will:
      - Prompt for your partner’s GitHub username.
      - Automatically download your partner's public key from GitHub.
         - If your partner has multiple public keys, it will ask you to choose which one to use.
      - Prompt you to enter a secret message.
        - You could write anything here, but your goal is to exchange a key. So you should select a single value between 1 and 10,
        and your message should say something like "The number I chose is: 5" (or whatever number you chose)
      - Encrypt the message and save the encrypted message to your computer.

   Here's the command you should run to execute
   the script:

      ```
      ./encrypt_message.sh
      ```

4. **Verify that the script ran successfully:**
   When the script finishes, you should see a new folder called `rsa_encryption_activity`. Inside that folder, you should see:
      - two other new folders called `send` and `receive`
      - a file called `partners_public_key.pem`
      - In the `send` folder, a file called `encrypted_message.b64`

5. **Commit these files to your Git repository:**
   Once the message is encrypted, share it with you partner by committing to your repository. This code will add all of the new files you created in the previous step.

      ```bash
      git add .
      git commit -m "Added public key and encrypted message"
      git push
      ```

### Part 2: Decrypt the Received Message

7. **Return to projects/encryption/**

   If you've gone into another folder, might need to run:

   ```bash
   cd ..
   ```

8. **Download your partner's encrypted message**

   Visit your partner's GitHub repository and download their file `send/encrypted_message.b64`. You'll need to move it into your `receive` folder. It's easiest to open your `downloads` folder in finder and drag it to the right place. You could also use the `mv` command in the terminal.

9. **Run the decryption script**

   Execute the decryption script, which will:
      - Ask for the location of your private key (you should be able to accept the default: `~/.ssh/id_rsa`).
      - Decrypt the received message and save the decrypted file to the `receive` folder.

      ```bash
      ./decrypt_message.sh
      ```

10. **Verify the decrypted message**

   After running the script, it will output the decrypted message to your screen. It will also save the decrypted file `receive/decrypted_message.txt`.

11. **Commit the decrypted message to your Git repository:**

   Once you have successfully decrypted your partner’s message, commit all the remaining files to your repository:

   ```bash
   git add .
   git commit -m "Added decrypted message and plaintext secret message"
   git push
   ```

### Part 3: Generate your message-specific keys

Now you and your partner have each selected and exchanged a number. You'll add your number and your partner's number together to get 
your inital key. For example, if you chose 5 and your partner chose 8, your first key will be 13. 

Each message that you and your partner exchange will have a new key. You'll generate the keys using an interesting math function:

New Key = (Old Key * 3 + 7) % 26

We'll discuss in class how this math works. If you want to do this in desmos, you can type: mod((x*3+7),26) (where x is your old key).

You and your partner will each send at least two messages, so run this function at least four times to generate four keys. We'll use
a worksheet to work this out.

Here's an example:

    Parter 1 chose 5
    Parter 2 chose 8
    Key 1 = 5 + 8 = 13
    Key 2 = (13 × 3 + 7) % 26 = 20
    Key 3 = (20 × 3 + 7) % 26 = 15
    Key 4 = (15 × 3 + 7) % 26 = 0


### Part 4: Encrypted chat, with symmetric encryption

Now that you have your keys, you're ready to chat. Decide which partner will send the first message, and then you will take turns from there.

To send a message:
    - First, select the next unused key
    - Decide the message that you want to send, and write it down
    - Use a Caesar Cipher to encode your message using your key
    - Send the message to your partner. They will decrypt and respond

You'll be manually encoding/decoding these messages, so you'll probably want
to keep them short.

(You and your partner can choose together how you want to share these messages, 
a google doc might be the most convenient. You'll copy the entire
conversation into a Markdown file at the end)

### Part 5: Reflection

Add a README.md file at this path:

`projects/encryption/README.md`

copy/paste the Markdown [from this template](https://raw.githubusercontent.com/gracehoppercenter/ict/refs/heads/main/docs/f25/courses/itd110/goals/resources/ssh_activity/reflection_template.md) and answer each of the questions.

### Final GitHub Repository Structure

At the end of this activity, your `projects/encryption` folder in your GitHub repository should contain:

- `rsa_encryption_activity/partners_public_key.pub`: Your partner's original public key (downloaded from GitHub).
- `README.md`: with the completed template.
- `rsa_encryption_activity/send/encrypted_message.b64`: The encrypted message you sent to your partner.
- `rsa_encryption_activity/receive/encrypted_message.b64` (from partner): The encrypted message you received from your partner.
- `rsa_encryption_activity/receive/decrypted_message.txt`: The decrypted message you received from your partner.


### Disclaimers:

- **Important:** **NEVER commit your private key (`~/.ssh/id_rsa`) to your repository or share it with anyone!**
- The actual protocol follows similar steps, but the math is way more complex. I'm happy to 
chat with anyone who wants to understand more, but here are a few links to get you started:
   - The actual key-exchange algorithm: [https://en.wikipedia.org/wiki/Diffie%E2%80%93Hellman_key_exchange]
   - The algorithm that generates new keys for each message: [https://en.wikipedia.org/wiki/Double_Ratchet_Algorithm]
   - The symmetric encryption algorithm that Signal uses: [https://en.wikipedia.org/wiki/Advanced_Encryption_Standard]

## Grading Rubric

This project will be graded in two parts: half of the project grade will come 
from your repo and Markdown files, based on the rubric below. 
The remaining half will come from an 
in-class writing exercise that will require you to explain your code.

In the gradebook, It will be weighted at 10 points.


# Encryption Project Rubric

| Assessment Criteria | Meets Expectations - 4 points | Partially Meets Expectations - 3 points | Does Not Meet Expectations - 2 points | Not Present - 0 points |
|---------------------|-------------------------------|-----------------------------------------|---------------------------------------|------------------------|
| **Asymmetric Encryption Process** | Successfully encrypts and decrypts initial key exchange using SSH keys; all encrypted files are properly committed to GitHub repository. | Encryption/decryption process is mostly complete but may have minor errors or missing files in repository. | Major errors in encryption process or multiple missing files from required repository structure. | No evidence of asymmetric encryption process completed. |
| **Symmetric Encryption & Key Evolution** | Successfully exchanges at least 4 messages using evolving keys; demonstrates correct application of key evolution formula and Caesar cipher for all messages. | Message exchange is partially complete or contains errors in key evolution or encryption/decryption process. | Significant errors in symmetric encryption or key evolution that prevent successful message exchange. | No symmetric message exchange completed. |
| **Technical Documentation** | README contains complete and accurate tables,  binary conversion, packet diagrams | Documentation is mostly complete but may lack detail, contain minor inaccuracies, or miss some required elements. | Documentation is incomplete, contains significant errors, or lacks required tables and reflections. | README entirely missing or barely changed from the template. |
| **Protocol Understanding** | Reflection demonstrates clear understanding of symmetric vs. asymmetric encryption, purpose of key evolution, TCP/IP layer connections, and security principles. | Reflection shows basic understanding but may lack depth or contain minor misconceptions about cryptographic concepts. | Reflection demonstrates significant misunderstandings of core encryption concepts or TCP/IP connections. | No reflection provided or shows no understanding of concepts. |
