package hn.unah.lenguajes.demo.services.Impl;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import hn.unah.lenguajes.demo.entities.Cliente;
import hn.unah.lenguajes.demo.entities.Usuario;
import hn.unah.lenguajes.demo.repositories.ClienteRepository;
import hn.unah.lenguajes.demo.repositories.UsuarioRepository;
import hn.unah.lenguajes.demo.services.ClienteServices;

@Service
public class ClienteServiceImpl implements ClienteServices{

    @Autowired
    private ClienteRepository clienteRepository;

    @Autowired
    private UsuarioRepository usuarioRepository;

    @Override
    public Cliente crearCliente(Cliente cliente) {
        return clienteRepository.save(cliente);    
    }

    @Override
    public Cliente buscarClientePoUsuario(String nombreUsuario, String contra) {
        if(usuarioRepository.existsById(nombreUsuario)){
            Usuario usuarioLogin = usuarioRepository.findById(nombreUsuario).get();
            if(usuarioLogin.getContraseniausuario() == contra){
                return usuarioLogin.getCliente();
            } 
        }
       return null;
    }
}
