/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package test;

import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.ejb.embeddable.EJBContainer;
import javax.naming.CommunicationException;
import javax.naming.Context;
import javax.naming.InitialContext;
import javax.naming.NamingException;
import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.EntityTransaction;
import javax.persistence.Persistence;
import jpamodel.HRFacadeBean;
import jpamodel.NeostoreProdutoCategoria;

/**
 *
 * @author belchiorpalma
 */
public class ExtendedClass extends SuperClass{
    private HRFacadeBean hRFacade = lookupHRFacadeBean();
    
    public void print(){
       try{
            List<NeostoreProdutoCategoria> pc = hRFacade.getNeostoreProdutoCategoriaFindAll();
            System.out.println("tamanho"+pc.size());
        }catch(Exception e ){
            e.printStackTrace();
        } 
    }
    
    public void execute(){
        try{
            EntityManagerFactory emf = Persistence.createEntityManagerFactory("NeoStorePU");
            EntityManager em = emf.createEntityManager();
            EntityTransaction tx = em.getTransaction();
            tx.begin();
            NeostoreProdutoCategoria n = new NeostoreProdutoCategoria();
            n.setPrcaDescricao("teste ejb");
            em.persist(n);
            tx.commit();
            em.close();
            
           // final Context context = 
            //EJBContainer container = javax.ejb.embeddable.EJBContainer.createEJBContainer();
            //HRFacadeBean instance = (HRFacadeBean)container.getContext().lookup("java:global/NeoStore/HRFacade!jpamodel.HRFacadeBean");
            
            
       /* }catch(CommunicationException ex){
            System.out.println(ex.getClass().getName());
            System.out.println(ex.getRootCause().getLocalizedMessage());
            System.out.println("\n*** A comunication exception was raised. This typically\n *** occurs when you make bad thinks.");
         */   
        }catch(Exception e){
            e.printStackTrace();
        }
    }
    
    private HRFacadeBean lookupHRFacadeBean() {
        try {
            Context c = new InitialContext();
            return (HRFacadeBean) c.lookup("java:global/NeoStore/HRFacade!jpamodel.HRFacadeBean");
        } catch (NamingException ne) {
            Logger.getLogger(getClass().getName()).log(Level.SEVERE, "exception caught", ne);
            throw new RuntimeException(ne);
        }
    }
    public static void main(String args[]){
       //ExtendedClass e = new ExtendedClass();
       //e.execute();
       
        //e.print();
        HRFacadeBean hr = new HRFacadeBean();
        for(NeostoreProdutoCategoria p: hr.getNeostoreProdutoCategoriaFindAll()){
            System.out.println(p.toString());
        }
        System.out.println("printing.......");
        for(NeostoreProdutoCategoria p: hr.getNeostoreProdutoCategoriaFindAll()){
            System.out.println(p.toString());
        }
        
    }

    
    
}
