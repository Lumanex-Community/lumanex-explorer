# Lumanex Network Explorer
Block explorer for Lumanex Network CryptoNote based cryptocurrency.

#### Installation

1) It takes data from daemon d. It should be accessible from the Internet. Run Lumanexd with open port as follows:
```bash
./Lumanexd --p2p-bind-ip 0.0.0.0 --p2p-bind-port 45000  --rpc-bind-ip 0.0.0.0 --rpc-bind-port 45001 --enable-blockexplorer --enable-cors="*"
```
2) Just upload to your website and change 'api' variable in config.js to point to your daemon.

### Note
A lot of this code is from the great Karbovanets/Karbowanec-Blockchain-Explorer
