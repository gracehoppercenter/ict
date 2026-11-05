"""
Base64 encoder / decoder tools for the CSC 221 Base64 project.

The whole pipeline, in both directions:

    encode:  file --> bit string --> Base64 string --> text file
    decode:  text file --> Base64 string --> bit string --> file

Run this file to run the doctests. No output means every test passed:

    $ python3 b64tools.py
"""

DIGITS = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/'


# ---------------------------------------------------------------------------
# Bits <--> Base64
# TODO: copy in the function bodies you already wrote.
# ---------------------------------------------------------------------------

def bits_to_base64(bitstr):
    """
      >>> bits_to_base64('010001110100100001100111')
      'R0hn'
      >>> bits_to_base64('01001101')
      'TQ=='
      >>> bits_to_base64('0100110101100001')
      'TWE='
    """
    # TODO: copy in your code from last week


def base64_to_bits(b64str):
    """
      >>> base64_to_bits('R0hn')
      '010001110100100001100111'
      >>> base64_to_bits('TQ==')
      '01001101'
      >>> base64_to_bits('TWE=')
      '0100110101100001'
    """
    # TODO: copy in your code from Monday


# ---------------------------------------------------------------------------
# Files <--> bits
# These are done for you. Read them, but you don't need to change them.
# ---------------------------------------------------------------------------

def file_to_bits(filename):
    """
    Read any file and return its contents as a bit string.

      >>> bits = file_to_bits('GHClogoSmall.png')
      >>> bits[:32]
      '10001001010100000100111001000111'
    """
    # 'rb' means "read binary". We get back a bytes object, which is a
    # sequence of ints from 0 to 255 (one int per byte).
    with open(filename, 'rb') as infile:
        data = infile.read()

    # Turn each byte (an int) into a string of 8 bits. For each of the 8
    # places, from the left (place 7, worth 128) to the right (place 0,
    # worth 1):
    #   1 << place  makes a "mask" with a single 1 in that place:
    #               1 << 7 is 10000000, 1 << 0 is 00000001
    #   byte & mask keeps only the bit in that place. The result is 0 if
    #               that bit is 0 and something else if it is 1.
    #
    # Example: 71 is 01000111
    #     place 7:  01000111 & 10000000 = 00000000  -->  '0'
    #     place 6:  01000111 & 01000000 = 01000000  -->  '1'
    #     place 5:  01000111 & 00100000 = 00000000  -->  '0'
    #     ...and so on down to place 0
    bitstr = ''
    for byte in data:
        for place in range(7, -1, -1):
            if byte & (1 << place):
                bitstr += '1'
            else:
                bitstr += '0'
    return bitstr


def bits_to_file(bitstr, filename):
    """
    Write a bit string out to a file named filename.
    """
    # Turn each group of 8 bits back into an int.
    nums = []
    for i in range(0, len(bitstr), 8):
        nums.append(int(bitstr[i:i+8], 2))

    # 'wb' means "write binary". bytes() turns our list of ints into the
    # bytes object that a binary file needs.
    with open(filename, 'wb') as outfile:
        outfile.write(bytes(nums))


# ---------------------------------------------------------------------------
# Output file names
# These are placeholders that always return the same name. Fix them last.
# ---------------------------------------------------------------------------

def encoded_filename(filename):
    """
    Return the name of the text file to write the Base64 into.
    """
    return 'b64.txt'


def decoded_filename(filename):
    """
    Return the name of the file to write the decoded bytes into.
    """
    return 'file.bin'


# ---------------------------------------------------------------------------
# Putting it all together
# ---------------------------------------------------------------------------

def encode_file(filename):
    """
    Base64 encode the file named filename. Write the Base64 string to a
    text file, and return the text file's name.
    """
    # TODO:
    # 1. Read the file into a bit string.
    # 2. Turn the bit string into a Base64 string.
    # 3. Get the name of the output file.
    # 4. Write the Base64 string to the output file.
    # 5. Return the output file's name.


def decode_file(filename):
    """
    Decode the Base64 text file named filename back into the original file,
    and return the new file's name.
    """
    # TODO:
    # 1. Read the Base64 string from the text file.
    # 2. Turn the Base64 string into a bit string.
    # 3. Get the name of the output file.
    # 4. Write the bit string to the output file.
    # 5. Return the output file's name.


if __name__ == '__main__':
    import doctest
    doctest.testmod()
