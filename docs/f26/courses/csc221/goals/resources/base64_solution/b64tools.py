"""
Base64 encoder / decoder tools for the CSC 221 Base64 project.

The whole pipeline, in both directions:

    encode:  file --> bit string --> Base64 string --> text file
    decode:  text file --> Base64 string --> bit string --> file

Run this file directly to run the doctests:

    $ python3 b64tools.py
"""

DIGITS = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/'


# ---------------------------------------------------------------------------
# Bits <--> Base64  (built in class, weeks 9 and 10)
# ---------------------------------------------------------------------------

def bits_to_base64(bitstr):
    """
      >>> bits_to_base64('010001110100100001100111')
      'R0hn'
      >>> bits_to_base64('010101000110010101110011')
      'VGVz'
      >>> bits_to_base64('01001101')
      'TQ=='
      >>> bits_to_base64('0100110101100001')
      'TWE='
      >>> s = '100111010110100101010011010111100111011110001110110101110011000011'
      >>> bits_to_base64(s)
      'nWlTXneO1zD'
      >>> s2 = '10110101100010110011010101010110111100011101101011100101'
      >>> bits_to_base64(s2)
      'tYs1VvHa5Q=='
    """
    b64str = ''
    ending = ''

    # Since bitstr length will be a multiple of 8 (a byte), there are three
    # cases:
    #   1. len(bitstr) % 6 == 0 when total bytes is a multiple of 3.
    #   2. len(bitstr) % 6 == 2 when total bytes % 3 is 1.
    #   3. len(bitstr) % 6 == 4 when total bytes % 3 is 2.
    # Cases 2 and 3 require padding.
    if len(bitstr) % 6 == 2:
        ending = '=='
        bitstr += '0000'
    elif len(bitstr) % 6 == 4:
        ending = '='
        bitstr += '00'

    # Each group of 6 bits becomes one Base64 digit.
    for i in range(0, len(bitstr), 6):
        b64str += DIGITS[int(bitstr[i:i+6], 2)]

    return b64str + ending


def base64_to_bits(b64str):
    """
      >>> base64_to_bits('R0hn')
      '010001110100100001100111'
      >>> base64_to_bits('VGVz')
      '010101000110010101110011'
      >>> base64_to_bits('TQ==')
      '01001101'
      >>> base64_to_bits('TWE=')
      '0100110101100001'
      >>> base64_to_bits('nWlTXneO1zD')
      '100111010110100101010011010111100111011110001110110101110011000011'
      >>> s2 = '10110101100010110011010101010110111100011101101011100101'
      >>> base64_to_bits('tYs1VvHa5Q==') == s2
      True
    """
    # Each '=' stands for 2 zero bits that the encoder added as filler.
    padding = b64str.count('=')
    b64str = b64str.rstrip('=')

    # Each Base64 digit becomes 6 bits.
    bitstr = ''
    for ch in b64str:
        bitstr += f'{DIGITS.index(ch):06b}'

    # Throw away the filler bits.
    if padding:
        bitstr = bitstr[:-2 * padding]

    return bitstr


# ---------------------------------------------------------------------------
# Files <--> bits  (given to students in the starter code)
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
# Output file names  (only uses string methods from chapter 3)
# ---------------------------------------------------------------------------

def encoded_filename(filename):
    """
      >>> encoded_filename('GHClogoSmall.png')
      'GHClogoSmall_b64_png.txt'
      >>> encoded_filename('notes.pdf')
      'notes_b64_pdf.txt'
    """
    parts = filename.split('.')
    name = '.'.join(parts[:-1])
    ext = parts[-1]
    return name + '_b64_' + ext + '.txt'


def decoded_filename(filename):
    """
      >>> decoded_filename('GHClogoSmall_b64_png.txt')
      'GHClogoSmall.png'
      >>> decoded_filename('notes_b64_pdf.txt')
      'notes.pdf'
    """
    parts = filename[:-4].split('_b64_')
    return parts[0] + '.' + parts[1]


# ---------------------------------------------------------------------------
# Putting it all together
# ---------------------------------------------------------------------------

def encode_file(filename):
    """
    Base64 encode filename. Write the result to a text file and return
    the text file's name.
    """
    b64str = bits_to_base64(file_to_bits(filename))
    outname = encoded_filename(filename)
    with open(outname, 'w') as outfile:
        outfile.write(b64str)
    return outname


def decode_file(filename):
    """
    Decode the Base64 text file filename back into the original file and
    return the original file's name.
    """
    with open(filename) as infile:
        b64str = infile.read().strip()     # ignore any trailing newline
    outname = decoded_filename(filename)
    bits_to_file(base64_to_bits(b64str), outname)
    return outname


if __name__ == '__main__':
    import doctest
    doctest.testmod()
