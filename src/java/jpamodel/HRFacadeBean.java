/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package jpamodel;

/**
 *
 * @author belchiorpalma
 */
import java.util.List;
import java.util.Collections;
import java.util.List;

import javax.annotation.Resource;

import javax.ejb.SessionContext;
import javax.ejb.Stateless;

import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.EntityTransaction;
import javax.persistence.Persistence;
import javax.persistence.PersistenceContext;
import javax.persistence.Query;
@Stateless(name = "HRFacade", mappedName = "NeoStore-JPAModel-HRFacade")
public class HRFacadeBean implements HRFacade, HRFacadeLocal {
    private EntityManagerFactory emf = Persistence.createEntityManagerFactory("NeoStorePU");
    private EntityManager em = emf.createEntityManager();
    
    public void example(){
    // TODO code application logic here
        EntityManagerFactory emf = Persistence.createEntityManagerFactory("NeoStorePU");
        EntityManager em = emf.createEntityManager();
        EntityTransaction tx = em.getTransaction();
        
        //tx.begin();
                
        //Pessoa p = new Pessoa("Pedro Silva Souza da Silva");
                
        //em.persist(p);
        //tx.commit();
        em.close();
    }
    //@Resource
    //SessionContext sessionContext;
    //@PersistenceContext(unitName = "JPAModel")
    //private EntityManager em;

    public HRFacadeBean() {
    }

    @Override
    public Object queryByRange(String jpqlStmt, int firstResult, int maxResults) {
        Query query = em.createQuery(jpqlStmt);
        if (firstResult > 0) {
            query = query.setFirstResult(firstResult);
        }
        if (maxResults > 0) {
            query = query.setMaxResults(maxResults);
        }
        return query.getResultList();
    }
    

    @Override
    public NeostoreProdutoCategoria persistNeostoreProdutoCategoria(NeostoreProdutoCategoria neostoreProdutoCategoria) {
        em.persist(neostoreProdutoCategoria);
        return neostoreProdutoCategoria;
    }

    @Override
    public NeostoreProdutoCategoria mergeNeostoreProdutoCategoria(NeostoreProdutoCategoria neostoreProdutoCategoria) {
       return em.merge(neostoreProdutoCategoria);
    }

    @Override
    public void removeNeostoreProdutoCategoria(NeostoreProdutoCategoria neostoreProdutoCategoria) {
        neostoreProdutoCategoria = em.find(NeostoreProdutoCategoria.class, neostoreProdutoCategoria.getPrcaCodigo());
        em.remove(neostoreProdutoCategoria);
    }

    @Override
    public List<NeostoreProdutoCategoria> getNeostoreProdutoCategoriaFindAll() {
       //return Collections.emptyList();
       return em.createNamedQuery("NeostoreProdutoCategoria.findAll").getResultList();
    }

    @Override
    public List<NeostoreProdutoCategoria> getNeostoreProdutoCategoriaFindById(int id) {
        return em.createNamedQuery("NeostoreProdutoCategoria.findById").setParameter("id", id).getResultList();
    }
    
}
